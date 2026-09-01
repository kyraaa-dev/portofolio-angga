import re
import sys

def clean_file(filepath):
    with open(filepath, 'r') as f:
        content = f.read()

    # 1. Remove CSS block
    # Start: /* ===== MERDEKA MODE ===== */
    # End: before </style> or before /* Prevent Theme Flash */
    # Let's just remove everything from /* ===== MERDEKA MODE ===== */ up to just before </style>
    content = re.sub(r'[ \t]*/\* ===== MERDEKA MODE ===== \*/.*?(?=</style>)', '', content, flags=re.DOTALL)

    # Also there might be scattered [data-merdeka="true"] before that block? No, it seems it was all in one place. But let's check for any remaining data-merdeka blocks if any.
    # Actually wait, grep showed lines 1872 inside the block. So it's all inside.

    # 2. Remove Merdeka toggles in navbar
    # Start: <!-- Merdeka Audio Toggle -->
    # End: after the </button> for merdekaToggle
    content = re.sub(r'[ \t]*<!-- Merdeka Audio Toggle -->.*?</button>[ \t]*\n', '', content, flags=re.DOTALL)
    content = re.sub(r'[ \t]*<!-- Merdeka Mode Toggle 🇮🇩 -->.*?</button>[ \t]*\n', '', content, flags=re.DOTALL)

    # 3. Remove DOM elements
    # Start: <!-- ===== MERDEKA MODE ELEMENTS ===== -->
    # End: <!-- Back to Top Progress Ring -->
    content = re.sub(r'[ \t]*<!-- ===== MERDEKA MODE ELEMENTS ===== -->.*?<!-- Back to Top Progress Ring -->', '    <!-- Back to Top Progress Ring -->', content, flags=re.DOTALL)

    # 4. Remove JS
    # Start: <!-- ===== MERDEKA MODE JAVASCRIPT ===== -->
    # End: </script> right before </body>
    content = re.sub(r'[ \t]*<!-- ===== MERDEKA MODE JAVASCRIPT ===== -->.*?(?=</script>\n</body>)', '', content, flags=re.DOTALL)

    # Save
    with open(filepath, 'w') as f:
        f.write(content)
    print(f"Cleaned {filepath}")

if __name__ == "__main__":
    for arg in sys.argv[1:]:
        clean_file(arg)
