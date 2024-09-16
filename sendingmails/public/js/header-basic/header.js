export default function (editor, opts) {
    const bm = editor.BlockManager;
    const { category, blocks, stylePrefix, flexGrid, rowHeight, addBasicStyle } = opts;
    const clsRow = `${stylePrefix}row`;
    const clsCell = `${stylePrefix}cell`;
    const styleRow = flexGrid
        ? `
    .${clsRow} {
      display: flex;
      justify-content: flex-start;
      align-items: stretch;
      flex-wrap: nowrap;
      padding: 10px;
    }
    @media (max-width: 768px) {
      .${clsRow} {
        flex-wrap: wrap;
      }
    }`
        : `
    .${clsRow} {
      display: table;
      padding: 10px;
      width: 100%;
    }
    @media (max-width: 768px) {
      .${stylePrefix}cell, .${stylePrefix}cell30, .${stylePrefix}cell70 {
        width: 100%;
        display: block;
      }
    }`;
    const styleClm = flexGrid
        ? `
    .${clsCell} {
      min-height: ${rowHeight}px;
      flex-grow: 1;
      flex-basis: 100%;
    }`
        : `
    .${clsCell} {
      width: 8%;
      display: table-cell;
      height: ${rowHeight}px;
    }`;
    const styleClm30 = `
  .${stylePrefix}cell30 {
    width: 30%;
  }`;
    const styleClm70 = `
  .${stylePrefix}cell70 {
    width: 70%;
  }`;
    const step = 0.2;
    const minDim = 1;
    const currentUnit = 1;
    const resizerBtm = {
        tl: 0,
        tc: 0,
        tr: 0,
        cl: 0,
        cr: 0,
        bl: 0,
        br: 0,
        minDim
    };
    const resizerRight = Object.assign(Object.assign({}, resizerBtm), { cr: 1, bc: 0, currentUnit,
        minDim,
        step });
    // Flex elements do not react on width style change therefore I use
    // 'flex-basis' as keyWidth for the resizer on columns
    if (flexGrid) {
        resizerRight.keyWidth = 'flex-basis';
    }
    const rowAttr = {
        class: clsRow,
        'data-gjs-droppable': `.${clsCell}`,
        'data-gjs-resizable': resizerBtm,
        'data-gjs-name': 'Row'
    };
    const colAttr = {
        class: clsCell,
        'data-gjs-draggable': `.${clsRow}`,
        'data-gjs-resizable': resizerRight,
        'data-gjs-name': 'Cell'
    };
    if (flexGrid) {
        colAttr['data-gjs-unstylable'] = ['width'];
        colAttr['data-gjs-stylable-require'] = ['flex-basis'];
    }
    // Make row and column classes private
    const privateCls = [`.${clsRow}`, `.${clsCell}`];
    editor.on('selector:add', selector => privateCls.indexOf(selector.getFullName()) >= 0 &&
        selector.set('private', 1));
    const attrsToString = (attrs) => {
        const result = [];
        for (let key in attrs) {
            let value = attrs[key];
            const toParse = value instanceof Array || value instanceof Object;
            value = toParse ? JSON.stringify(value) : value;
            result.push(`${key}=${toParse ? `'${value}'` : `'${value}'`}`);
        }
        return result.length ? ` ${result.join(' ')}` : '';
    };
    const toAdd = (name) => blocks.indexOf(name) >= 0;
    const attrsRow = attrsToString(rowAttr);
    const attrsCell = attrsToString(colAttr);
    const commonBlockProps = {
        category,
        select: true,
    };
    toAdd('column1-1') &&
        bm.add('column1-1', Object.assign(Object.assign({}, commonBlockProps), { label: opts.labelColumn1, media: `<svg viewBox="0 0 24 24">
        <path fill="currentColor" d="M2 20h20V4H2v16Zm-1 0V4a1 1 0 0 1 1-1h20a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1Z"/>
      </svg>`, content: `<div ${attrsRow}>
        <div ${attrsCell}></div>
      </div>
      ${addBasicStyle
                ? `<style>
          ${styleRow}
          ${styleClm}
        </style>`
                : ''}` }));
    toAdd('column2-2') &&
        bm.add('column2-2', Object.assign(Object.assign({}, commonBlockProps), { label: opts.labelColumn2, media: `<svg viewBox="0 0 23 24">
        <path fill="currentColor" d="M2 20h8V4H2v16Zm-1 0V4a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1ZM13 20h8V4h-8v16Zm-1 0V4a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1h-8a1 1 0 0 1-1-1Z"/>
      </svg>`, content: `<div ${attrsRow}>
        <div ${attrsCell}></div>
        <div ${attrsCell}></div>
      </div>
      ${addBasicStyle
                ? `<style>
          ${styleRow}
          ${styleClm}
        </style>`
                : ''}` }));
   
  }
  