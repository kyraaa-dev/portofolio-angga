const puppeteer = require('puppeteer');

(async () => {
  const browser = await puppeteer.launch({ headless: true, args: ['--no-sandbox'] });
  const page = await browser.newPage();
  
  page.on('console', msg => console.log('PAGE LOG:', msg.text()));
  page.on('pageerror', error => console.log('PAGE ERROR:', error.message));

  await page.goto('http://127.0.0.1:8000', { waitUntil: 'networkidle2' });
  
  // click the first project
  await page.evaluate(() => {
      const cards = document.querySelectorAll('.project-card');
      if (cards.length > 0) {
          cards[0].click();
      } else {
          console.log('No project cards found');
      }
  });

  await page.waitForTimeout(2000);
  
  const modalText = await page.evaluate(() => {
      return {
         title: document.getElementById('modalTitle').textContent,
         desc: document.getElementById('modalDesc').textContent
      }
  });
  console.log('Modal text after 2 seconds:', modalText);

  await browser.close();
})();
