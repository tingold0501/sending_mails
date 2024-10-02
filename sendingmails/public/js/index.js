import blocks from "./blocks.js";
import commands from "./command/index.js";
import panels from "./panels.js";
import headers from "./headers.js";
import getAttribute from "./command/getAttribute.js";
const plugin = (editor, opts = {}) => {
    editor = grapesjs.init({
        height: "100%",
        showOffsets: true,
        noticeOnUnload: false,
        storageManager: false,
        container: "#gjs",
        fromElement: true,
        customSpots: { target: true },
        canvas: { styles: ["https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"] },
        plugins: ["grapesjs-preset-webpage"],
        pluginsOpts: {
            "grapesjs-preset-webpage": {},
        },
    });
    const config = Object.assign(
        {
            blocks: ["image","link-block", "quote", "text-basic","sect100", "sect50", "sect30", "sect37"],
            block: () => ({}),
            headers: ["header-01", "header-02"],
            header: () => ({}),
            modalImportTitle: "Import",
            modalImportButton: "Import",
            modalImportLabel: "",
            modalImportContent: "",
            importViewerOptions: {},
            textCleanCanvas: "Are you sure you want to clear the canvas?",
            showStylesOnChange: true,
            useCustomTheme: true,
        },
        opts
    );
    if (config.useCustomTheme && typeof window !== "undefined") {
        const primaryColor = "#463a3c";
        const secondaryColor = "#b9a5a6";
        const tertiaryColor = "#804f7b";
        const quaternaryColor = "#d97aa6";
        const prefix = "gjs-";
        let cssString = "";
        [
            ["one", primaryColor],
            ["two", secondaryColor],
            ["three", tertiaryColor],
            ["four", quaternaryColor],
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
        const style = document.createElement("style");
        style.innerText = cssString;
        document.head.appendChild(style);
    }
    // Load blocks
    blocks(editor, config);
    // Load commands
    commands(editor, config);
    // Load panels
    panels(editor, config);
    // Load header
    headers(editor, config);
    // Load Get Atribute
    getAttribute(editor, config);
};
export default plugin;

plugin();
