const puppeteer = require('puppeteer');
const fs = require('fs');

(async () => {
  const browser = await puppeteer.launch({ headless: true, args: ['--no-sandbox'] });
  const page = await browser.newPage();
  await page.setViewport({ width: 800, height: 600 });
  
  const html = `
    <!DOCTYPE html>
    <html>
    <head>
      <style>
        body {
          margin: 0;
          padding: 0;
          width: 800px;
          height: 600px;
          background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
          font-family: 'Inter', sans-serif;
          display: flex;
          align-items: center;
          justify-content: center;
          color: white;
          overflow: hidden;
        }
        .container {
          text-align: center;
          position: relative;
          z-index: 10;
        }
        h1 {
          font-size: 56px;
          font-weight: 800;
          margin: 0 0 20px 0;
          color: #FFD700;
          text-shadow: 0 4px 15px rgba(255, 215, 0, 0.3);
        }
        h2 {
          font-size: 32px;
          font-weight: 600;
          margin: 0;
          color: #9b59b6;
          letter-spacing: 2px;
        }
        .shapes {
          position: absolute;
          width: 100%;
          height: 100%;
          top: 0;
          left: 0;
          z-index: 1;
        }
        .circle {
          position: absolute;
          border-radius: 50%;
          background: rgba(155, 89, 182, 0.2);
          filter: blur(40px);
        }
        .c1 { width: 400px; height: 400px; top: -100px; left: -100px; }
        .c2 { width: 300px; height: 300px; bottom: -50px; right: -50px; background: rgba(255, 215, 0, 0.15); }
        .badge {
          display: inline-block;
          background: rgba(255,255,255,0.1);
          padding: 10px 20px;
          border-radius: 30px;
          border: 1px solid rgba(255,255,255,0.2);
          margin-bottom: 30px;
          font-size: 18px;
          font-weight: 500;
        }
      </style>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;800&display=swap" rel="stylesheet">
    </head>
    <body>
      <div class="shapes">
        <div class="circle c1"></div>
        <div class="circle c2"></div>
      </div>
      <div class="container">
        <div class="badge">Certificate of Completion</div>
        <h1>Intro to Software Engineering</h1>
        <h2>RevoU Coding Camp</h2>
      </div>
    </body>
    </html>
  `;
  
  await page.setContent(html, { waitUntil: 'networkidle0' });
  await page.screenshot({ path: '/Applications/MAMP/htdocs/portfolio-angga/public/images/cert-revou-thumb.png' });
  await browser.close();
  console.log('Thumbnail generated successfully at cert-revou-thumb.png');
})();
