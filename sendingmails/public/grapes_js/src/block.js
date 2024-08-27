export default function(editor, opts) {
    const bm = editor.Blocks;
    let tableStyleStr = '';
    let cellStyleStr = '';
    let tableStyle = opts.tableStyle || {};
    let cellStyle = opts.cellStyle || {};
  
    const addBlock = (id, blockDef) => {
      opts.blocks.indexOf(id) >= 0 && editor.Blocks.add(id, {
        select: true,
        ...blockDef,
        ...opts.block(id),
      });
    }
  
    for (let prop in tableStyle){
      tableStyleStr += `${prop}: ${tableStyle[prop]}; `;
    }
    for (let prop in cellStyle){
      cellStyleStr += `${prop}: ${cellStyle[prop]}; `;
    }
  
    addBlock('sect100', {
      label: '1 Section',
      media: `<svg viewBox="0 0 24 24">
        <path fill="currentColor" d="M2 20h20V4H2v16Zm-1 0V4a1 1 0 0 1 1-1h20a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1Z"/>
      </svg>`,
      content: `
        <table style="${tableStyleStr}">
          <tr>
            <td style="${cellStyleStr}"></td>
          </tr>
        </table>
      `,
    });
  
    addBlock('sect50', {
      label: '1/2 Section',
      media: `<svg viewBox="0 0 23 24">
        <path fill="currentColor" d="M2 20h8V4H2v16Zm-1 0V4a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1ZM13 20h8V4h-8v16Zm-1 0V4a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1h-8a1 1 0 0 1-1-1Z"/>
      </svg>`,
      content: `
        <table style="${tableStyleStr}">
          <tr>
            <td style="${cellStyleStr} width: 50%"></td>
            <td style="${cellStyleStr} width: 50%"></td>
          </tr>
        </table>
      `,
    });
  
    addBlock('sect30', {
      label: '1/3 Section',
      media: `<svg viewBox="0 0 23 24">
        <path fill="currentColor" d="M2 20h4V4H2v16Zm-1 0V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1ZM17 20h4V4h-4v16Zm-1 0V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1ZM9.5 20h4V4h-4v16Zm-1 0V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1Z"/>
      </svg>`,
      content: `
        <table style="${tableStyleStr}">
          <tr>
            <td style="${cellStyleStr} width: 33.3333%"></td>
            <td style="${cellStyleStr} width: 33.3333%"></td>
            <td style="${cellStyleStr} width: 33.3333%"></td>
          </tr>
        </table>
      `,
    });
  
    addBlock('sect37', {
      label: '3/7 Section',
      media: `<svg viewBox="0 0 24 24">
        <path fill="currentColor" d="M2 20h5V4H2v16Zm-1 0V4a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1ZM10 20h12V4H10v16Zm-1 0V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H10a1 1 0 0 1-1-1Z"></path>
      </svg>`,
      content: `
        <table style="${tableStyleStr}">
          <tr>
            <td style="${cellStyleStr} width:30%"></td>
            <td style="${cellStyleStr} width:70%"></td>
          </tr>
        </table>
      `,
    });
  
    addBlock('button', {
      label: 'Button',
      media: `<svg viewBox="0 0 24 24">
          <path fill="currentColor" d="M20 20.5C20 21.3 19.3 22 18.5 22H13C12.6 22 12.3 21.9 12 21.6L8 17.4L8.7 16.6C8.9 16.4 9.2 16.3 9.5 16.3H9.7L12 18V9C12 8.4 12.4 8 13 8S14 8.4 14 9V13.5L15.2 13.6L19.1 15.8C19.6 16 20 16.6 20 17.1V20.5M20 2H4C2.9 2 2 2.9 2 4V12C2 13.1 2.9 14 4 14H8V12H4V4H20V12H18V14H20C21.1 14 22 13.1 22 12V4C22 2.9 21.1 2 20 2Z" />
      </svg>`,
      content: '<a class="button">Button</a>',
    });
  
    addBlock('divider', {
      label: 'Divider',
      media: `<svg viewBox="0 0 24 24">
          <path fill="currentColor" d="M21 18H2V20H21V18M19 10V14H4V10H19M20 8H3C2.45 8 2 8.45 2 9V15C2 15.55 2.45 16 3 16H20C20.55 16 21 15.55 21 15V9C21 8.45 20.55 8 20 8M21 4H2V6H21V4Z" />
      </svg>`,
      content: `
        <table style="width: 100%; margin-top: 10px; margin-bottom: 10px;">
          <tr>
            <td class="divider"></td>
          </tr>
        </table>
        <style>
          .divider {
            background-color: rgba(0, 0, 0, 0.1);
            height: 1px;
          }
        </style>
      `,
    });
  
    addBlock('text', {
      label: 'Text',
      media: `<svg viewBox="0 0 24 24">
        <path fill="currentColor" d="M18.5,4L19.66,8.35L18.7,8.61C18.25,7.74 17.79,6.87 17.26,6.43C16.73,6 16.11,6 15.5,6H13V16.5C13,17 13,17.5 13.33,17.75C13.67,18 14.33,18 15,18V19H9V18C9.67,18 10.33,18 10.67,17.75C11,17.5 11,17 11,16.5V6H8.5C7.89,6 7.27,6 6.74,6.43C6.21,6.87 5.75,7.74 5.3,8.61L4.34,8.35L5.5,4H18.5Z" />
      </svg>`,
      content: '<div class="text">Insert text here</div>',
    });
  
    addBlock('quote', {
      label: 'Quote',
      media: `<svg viewBox="0 0 24 24">
          <path fill="currentColor" d="M10,18H8L11,11H7V6H14V11L10,18M20,11H17.33L20,6H16V5H20V11M10,16.3L12.6,11H8.5L10,16.3M17,9.3L18.6,7H16V9.3Z" />
      </svg>`,
      content: '<blockquote class="quote">Insert quote here</blockquote>',
    });
  
    addBlock('image', {
      label: 'Image',
      media: `<svg viewBox="0 0 24 24">
          <path fill="currentColor" d="M20 4H4C2.89 4 2 4.89 2 6V18C2 19.11 2.89 20 4 20H20C21.11 20 22 19.11 22 18V6C22 4.89 21.11 4 20 4M8.5 13.5L11 17L14.5 12.5L18.5 18H5.5M4 6H20C20 6.05 20 6.11 20 6.16C19.8 7.42 18.88 8.5 17.66 8.74C16.44 9 15.33 8.32 14.89 7.17C14.6 6.36 13.8 5.85 12.91 5.85C12.34 5.85 11.8 6.16 11.56 6.69C11.14 7.59 10.16 8 9.16 7.75C8.21 7.5 7.5 6.63 7.5 5.63V5.5C7.5 5.5 7.36 5.5 7.36 5.5H4V6M19.3 8.1C18.64 8.8 17.8 9 17.1 8.5C16.4 8 16.17 7.14 16.5 6.5C16.8 5.86 17.65 5.64 18.3 6.15C18.95 6.66 19.2 7.6 18.8 8.2L18.7 8.2L19.3 8.1M4 6.16C4 6.1 4 6.05 4 6H7.36C7.36 6 7.5 5.98 7.5 5.98V5.63C7.5 5.63 8.17 5.5 8.5 6C8.83 6.5 9.33 7.16 10.23 7.5C11.12 7.86 12.14 7.5 12.47 6.77C12.76 6.2 13.3 5.85 13.89 5.85C14.8 5.85 15.6 6.36 15.89 7.17C16.33 8.32 17.44 9 18.66 8.74C19.88 8.5 20.8 7.42 21 6.16H4Z" />
      </svg>`,
      content: '<img class="image" src="http://placehold.it/250x250/78c5d6/fff/" alt="Image" />',
    });
  
    addBlock('video', {
      label: 'Video',
      media: `<svg viewBox="0 0 24 24">
          <path fill="currentColor" d="M17,10.5V7C17,6.45 16.55,6 16,6H8C7.45,6 7,6.45 7,7V17C7,17.55 7.45,18 8,18H16C16.55,18 17,17.55 17,17V13.5L22,18.5V5.5L17,10.5Z" />
      </svg>`,
      content: `
        <div class="video">
          <video src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4" controls></video>
        </div>
      `,
    });
  
    addBlock('social', {
      label: 'Social',
      media: `<svg viewBox="0 0 24 24">
        <path fill="currentColor" d="M16,12A4,4 0 0,1 12,16A4,4 0 0,1 8,12A4,4 0 0,1 12,8A4,4 0 0,1 16,12M21.35,11.1L22.5,12L21.35,12.9C21.85,14.65 21.85,16.35 21.35,18.1L22.5,19L21.35,19.9C19.65,21.85 17.35,23 15,23V20.95C16.55,20.55 18.05,19.7 19.35,18.35C20.65,17 21.5,15.55 21.95,14H19V10H21.95C21.5,8.45 20.65,7 19.35,5.65C18.05,4.3 16.55,3.45 15,3.05V1C17.35,1 19.65,2.15 21.35,4.1L22.5,5L21.35,5.9C21.85,7.65 21.85,9.35 21.35,11.1M3.5,3L6.05,5.55C5.65,6.55 5.45,7.6 5.45,8.7C5.45,10.05 5.9,11.25 6.7,12.25C7.5,13.25 8.5,14 9.65,14.5C10.8,15 12,15.25 13.25,15.25C14.4,15.25 15.6,15 16.75,14.5C17.9,14 18.9,13.25 19.7,12.25C20.5,11.25 20.95,10.05 20.95,8.7C20.95,7.6 20.75,6.55 20.35,5.55L22.9,3H20.4L17.5,5.95C18.55,7.25 19.2,8.85 19.2,10.5C19.2,13.5 16.5,16 13.25,16C10,16 7.3,13.5 7.3,10.5C7.3,8.85 7.95,7.25 9,5.95L6.1,3H3.5M15,5H13V1H11V5H9V7H11V9H13V7H15V5Z" />
      </svg>`,
      content: `
        <div class="social">
          <a href="https://facebook.com">Facebook</a>
          <a href="https://twitter.com">Twitter</a>
          <a href="https://linkedin.com">LinkedIn</a>
        </div>
      `,
    });
  }