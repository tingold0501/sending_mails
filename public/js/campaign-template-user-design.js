const editor = grapesjs.init({
    // Indicate where to init the editor. You can also pass an HTMLElement
    container: "#gjs",
    // Get the content for the canvas directly from the element
    // As an alternative we could use: `components: '<h1>Hello World Component!</h1>'`,
    fromElement: true,
    // Size of the editor
    height: "100%",
    width: "auto",
    // Disable the storage manager for the moment
    storageManager: false,
    // Avoid any default panel
    layerManager: {
        appendTo: ".layers-container",
    },
    deviceManager: {
        devices: [
            {
                name: "Desktop",
                width: "", // default size
            },
            {
                name: "Mobile",
                width: "320px", // this value will be used on canvas width
                widthMedia: "480px", // this value will be used in CSS @media
            },
        ],
    },
    panels: {
        defaults: [
            {
                id: "layers",
                el: ".panel__right",
                // Make the panel resizable
                resizable: {
                    maxDim: 350,
                    minDim: 200,
                    tc: 0, // Top handler
                    cl: 1, // Left handler
                    cr: 0, // Right handler
                    bc: 0, // Bottom handler
                    // Being a flex child we need to change `flex-basis` property
                    // instead of the `width` (default)
                    keyWidth: "flex-basis",
                },
            },
            {
                id: "panel-switcher",
                el: ".panel__switcher",
                buttons: [
                    {
                        id: "show-layers",
                        active: true,
                        label: `<svg style="display: block; max-width: 22px" viewBox="0 0 24 24">
          <path fill="currentColor" d="M12,16L19.36,10.27L21,9L12,2L3,9L4.63,10.27M12,18.54L4.62,12.81L3,14.07L12,21.07L21,14.07L19.37,12.8L12,18.54Z"></path>
      </svg>`,
                        command: "show-layers",
                        togglable: false,
                    },
                    {
                        id: "show-style",
                        active: true,
                        label: `<svg style="display: block; max-width: 22px" viewBox="0 0 24 24">
            <path fill="currentColor" d="M20.71,4.63L19.37,3.29C19,2.9 18.35,2.9 17.96,3.29L9,12.25L11.75,15L20.71,6.04C21.1,5.65 21.1,5 20.71,4.63M7,14A3,3 0 0,0 4,17C4,18.31 2.84,19 2,19C2.92,20.22 4.5,21 6,21A4,4 0 0,0 10,17A3,3 0 0,0 7,14Z"></path>
        </svg>`,
                        command: "show-styles",
                        togglable: false,
                    },
                    {
                        id: "show-traits",
                        active: true,
                        label: "Traits",
                        command: "show-traits",
                        togglable: false,
                    },
                ],
            },
            {
                id: "panel-devices",
                el: ".panel__devices",
                buttons: [
                    {
                        id: "device-desktop",
                        label: `<svg style="display: block; max-width: 22px" viewBox="0 0 24 24">
            <path fill="currentColor" d="M21,16H3V4H21M21,2H3C1.89,2 1,2.89 1,4V16A2,2 0 0,0 3,18H10V20H8V22H16V20H14V18H21A2,2 0 0,0 23,16V4C23,2.89 22.1,2 21,2Z"></path>
        </svg>`,
                        command: "set-device-desktop",
                        active: true,
                        togglable: false,
                    },
                    {
                        id: "device-mobile",
                        label: `<svg style="display: block; max-width: 22px" viewBox="0 0 24 24">
            <path fill="currentColor" d="M17,19H7V5H17M17,1H7C5.89,1 5,1.89 5,3V21A2,2 0 0,0 7,23H17A2,2 0 0,0 19,21V3C19,1.89 18.1,1 17,1Z"></path>
        </svg>`,
                        command: "set-device-mobile",
                        togglable: false,
                    },
                ],
            },
        ],
    },
    selectorManager: {
        appendTo: ".styles-container",
    },
    styleManager: {
        appendTo: ".styles-container",
        sectors: [
            {
                name: "Dimension",
                open: false,
                // Use built-in properties
                buildProps: ["width", "min-height", "padding"],
                properties: [
                    {
                        type: "integer",
                        name: "The width", // Label for the property
                        property: "width", // CSS property (if buildProps contains it will be extended)
                        units: ["px", "%"], // Units, available only for 'integer' types
                        defaults: "auto", // Default value
                        min: 0, // Min value, available only for 'integer' types
                    },
                ],
            },
            {
                name: "Extra",
                open: false,
                buildProps: ["background-color", "box-shadow", "custom-prop"],
                properties: [
                    {
                        id: "custom-prop",
                        name: "Custom Label",
                        property: "font-size",
                        type: "select",
                        defaults: "32px",
                        // List of options, available only for 'select' and 'radio'  types
                        options: [
                            { value: "12px", name: "Tiny" },
                            { value: "18px", name: "Medium" },
                            { value: "32px", name: "Big" },
                        ],
                    },
                ],
            },
        ],
    },
    blockManager: {
        appendTo: "#blocks",
        blocks: [
            {
                id: "section", // id is mandatory
                label: `<svg viewBox="0 0 24 24">
        <path fill="currentColor" d="M20,20H4A2,2 0 0,1 2,18V6A2,2 0 0,1 4,4H20A2,2 0 0,1 22,6V18A2,2 0 0,1 20,20M4,6V18H20V6H4M6,9H18V11H6V9M6,13H16V15H6V13Z"></path>
    </svg>`, // You can use HTML/SVG inside labels
                attributes: { class: "gjs-block-section" },
                content: `<section>
              <h1>This is a simple title</h1>
              <div>This is just a Lorem text: Lorem ipsum dolor sit amet</div>
            </section>`,
            },
            {
                id: "text",
                label: `<svg viewBox="0 0 24 24">
      <path fill="currentColor" d="M18.5,4L19.66,8.35L18.7,8.61C18.25,7.74 17.79,6.87 17.26,6.43C16.73,6 16.11,6 15.5,6H13V16.5C13,17 13,17.5 13.33,17.75C13.67,18 14.33,18 15,18V19H9V18C9.67,18 10.33,18 10.67,17.75C11,17.5 11,17 11,16.5V6H8.5C7.89,6 7.27,6 6.74,6.43C6.21,6.87 5.75,7.74 5.3,8.61L4.34,8.35L5.5,4H18.5Z"></path>
    </svg>`,
                content:
                    '<div data-gjs-type="text">Insert your text here</div>',
            },
            {
                id: "image",
                label: `<svg viewBox="0 0 24 24">
      <path fill="currentColor" d="M21,3H3C2,3 1,4 1,5V19A2,2 0 0,0 3,21H21C22,21 23,20 23,19V5C23,4 22,3 21,3M5,17L8.5,12.5L11,15.5L14.5,11L19,17H5Z"></path>
    </svg>`,
                // Select the component once it's dropped
                select: true,
                // You can pass components as a JSON instead of a simple HTML string,
                // in this case we also use a defined component type `image`
                content: { type: "image" },
                // This triggers `active` event on dropped components and the `image`
                // reacts by opening the AssetManager
                activate: true,
            },
        ],
    },
});

editor.Panels.addPanel({
    id: "panel-top",
    el: ".panel__top",
});
editor.Panels.addPanel({
    id: "basic-actions",
    el: ".panel__basic-actions",
    buttons: [
        {
            id: "visibility",
            active: true, // active by default
            className: "btn-toggle-borders",
            label: "<u>B</u>",
            command: "sw-visibility", // Built-in command
        },
        {
            id: "export",
            className: "btn-open-export",
            label: `<svg style="display: block; max-width: 22px" viewBox="0 0 24 24">
            <path fill="currentColor" d="M12.89,3L14.85,3.4L11.11,21L9.15,20.6L12.89,3M19.59,12L16,8.41V5.58L22.42,12L16,18.41V15.58L19.59,12M1.58,12L8,5.58V8.41L4.41,12L8,15.58V18.41L1.58,12Z"></path>
        </svg>`,
            command: "export-template",
            context: "export-template", // For grouping context of buttons from the same panel
        },
        {
            id: "show-json",
            className: "btn-show-json",
            label: "JSON",
            context: "show-json",
            command(editor) {
                editor.Modal.setTitle("Components JSON")
                    .setContent(
                        `<textarea style="width:100%; height: 250px;">
              ${JSON.stringify(editor.getComponents())}
            </textarea>`
                    )
                    .open();
            },
        },
    ],
});
editor.Commands.add("show-layers", {
    getRowEl(editor) {
        return editor.getContainer().closest(".editor-row");
    },
    getLayersEl(row) {
        return row.querySelector(".layers-container");
    },

    run(editor, sender) {
        const lmEl = this.getLayersEl(this.getRowEl(editor));
        lmEl.style.display = "";
    },
    stop(editor, sender) {
        const lmEl = this.getLayersEl(this.getRowEl(editor));
        lmEl.style.display = "none";
    },
});
editor.Commands.add("show-styles", {
    getRowEl(editor) {
        return editor.getContainer().closest(".editor-row");
    },
    getStyleEl(row) {
        return row.querySelector(".styles-container");
    },

    run(editor, sender) {
        const smEl = this.getStyleEl(this.getRowEl(editor));
        smEl.style.display = "";
    },
    stop(editor, sender) {
        const smEl = this.getStyleEl(this.getRowEl(editor));
        smEl.style.display = "none";
    },
});
editor.Commands.add("set-device-desktop", {
    run: (editor) => editor.setDevice("Desktop"),
});
editor.Commands.add("set-device-mobile", {
    run: (editor) => editor.setDevice("Mobile"),
});
