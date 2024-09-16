import loadBlocks from '/js/block-basic/blocks.js';
import loadHeaders from '/js/header-basic/header.js';
const plugin = (editor, opts = {}) => {
    const config = Object.assign({ blocks: [
            'column1',
            'column2',
            'column3',
            'column3-7',
            'text',
            'link',
            'image',
            'video',
            'map'
        ], flexGrid: false, stylePrefix: 'gjs-', addBasicStyle: true, category: 'Basic', labelColumn1: '1 Column', labelColumn2: '2 Columns', labelColumn3: '3 Columns', labelColumn37: '2 Columns 3/7', labelText: 'Text', labelLink: 'Link', labelImage: 'Image', labelVideo: 'Video', labelMap: 'Map', rowHeight: 75 }, opts);
    loadBlocks(editor, config);
    const config_heder = Object.assign({ blocks: [
            'column1-1',
            'column2-2',
    ], flexGrid: false, stylePrefix: 'gjs-', addBasicStyle: true, category: 'Test', labelHeader1: 'Header 1', labelHeader2: 'Header 2', rowHeight: 75 }, opts);
    loadHeaders(editor, config_heder);
};

export default plugin;
