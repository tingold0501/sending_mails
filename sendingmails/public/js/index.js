import blocks from '/js/blocks.js';
import commands from '/js/command/index.js';
import panels from '/js/panels.js';
import section from '/js/section.js';
const plugin = (editor, opts = {}) => {
    const config = Object.assign({ blocks: ['link-block', 'quote', 'text-basic'], block: () => ({}), sections: ['sect100', 'sect50', 'sect30', 'sect37'], section: () => ({}), modalImportTitle: 'Import', modalImportButton: 'Import', modalImportLabel: '', modalImportContent: '', importViewerOptions: {}, textCleanCanvas: 'Are you sure you want to clear the canvas?', showStylesOnChange: true, useCustomTheme: true }, opts);
    if (config.useCustomTheme && typeof window !== 'undefined') {
        const primaryColor = '#463a3c';
        const secondaryColor = '#b9a5a6';
        const tertiaryColor = '#804f7b';
        const quaternaryColor = '#d97aa6';
        const prefix = 'gjs-';
        let cssString = '';
        [
            ['one', primaryColor],
            ['two', secondaryColor],
            ['three', tertiaryColor],
            ['four', quaternaryColor],
        ].forEach(([cnum, ccol]) => {
            cssString += `
        .${prefix}${cnum}-bg {
          background-color: ${ccol};
        }

        .${prefix}${cnum}-color {
          color: ${ccol};
        }

        .${prefix}${cnum}-color-h:hover {
          color: ${ccol};
        }
      `;
        });
        const style = document.createElement('style');
        style.innerText = cssString;
        document.head.appendChild(style);
    }
    // Load blocks
    blocks(editor, config);
    section(editor, config);
    // Load commands
    commands(editor, config);
    // Load panels
    panels(editor, config);
};
export default plugin;
