import sys

old_schema = """    <!-- Schema.org JSON-LD for Google -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ProfilePage",
      "mainEntity": {
        "@type": "Person",
        "name": "ANGGA WIRANATA",
        "jobTitle": "Web Developer",
        "url": "https://kyraaa.pages.dev/",
        "image": "https://kyraaa.pages.dev/images/profile.jpg",
        "sameAs": [
          "https://github.com/kyraaa-dev",
          "https://www.linkedin.com/in/angga-wiranata-320837420"
        ],
        "description": "Professional Web Developer based in Indonesia, specializing in building modern web applications with Laravel, React, and modern CSS."
      }
    }
    </script>"""

new_schema = """    <!-- Schema.org JSON-LD for Google -->
    <script type="application/ld+json">
    [
      {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Angga Wiranata",
        "alternateName": "Portfolio Angga Wiranata",
        "url": "https://kyraaa.pages.dev/"
      },
      {
        "@context": "https://schema.org",
        "@type": "ProfilePage",
        "mainEntity": {
          "@type": "Person",
          "name": "ANGGA WIRANATA",
          "jobTitle": "Web Developer",
          "url": "https://kyraaa.pages.dev/",
          "image": "https://kyraaa.pages.dev/images/profile.jpg",
          "sameAs": [
            "https://github.com/kyraaa-dev",
            "https://www.linkedin.com/in/angga-wiranata-320837420"
          ],
          "description": "Professional Web Developer based in Indonesia, specializing in building modern web applications with Laravel, React, and modern CSS."
        }
      }
    ]
    </script>"""

for filepath in sys.argv[1:]:
    with open(filepath, 'r') as f:
        content = f.read()
    if old_schema in content:
        content = content.replace(old_schema, new_schema)
        with open(filepath, 'w') as f:
            f.write(content)
        print(f"Updated {filepath}")
    else:
        print(f"Schema not found in {filepath}")
