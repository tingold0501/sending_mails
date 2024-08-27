<div class="panel__top">
  <div class="panel__basic-actions">


  </div>
  <div class="panel__devices"></div>
  <div class="panel__switcher"></div>
</div>
<div class="editor-row">
  <div class="editor-canvas">
    <div id="gjs">
      
    </div>
  </div>
  <div class="panel__right">
    <div class="layers-container"></div>
    <div class="styles-container"></div>
    <div class="traits-container"></div>
    <div id="blocks"></div>
  </div>
</div>


    {{-- <div id="studio-editor"></div>
    <script>
      GrapesJsStudioSDK.createStudioEditor({
        root: '#studio-editor',
        licenseKey: 'c4758f85546347ba817b65993ffdbd001a5e4f69b26a4e0cb2d11b52dd18f75f',
        theme: 'dark',
        assets: {
          // Provide a custom upload handler for assets
          onUpload: async ({ files }) => {
            const body = new FormData();
            for (const file of files) {
              body.append('files', file);
            }
            const response = await fetch('ASSETS_UPLOAD_URL', { method: 'POST', body });
            const result = await response.json();
            // The expected result should be an array of assets, eg.
            // [{ src: 'ASSET_URL' }]
            return result;
          },
          // Provide a custom handler for loading project assets
          onLoad: async () => {
            // Load assets from your server
            const response = await fetch('ASSETS_LOAD_URL');
            const result = await response.json();
            // you can also provide default assets here
            return [ { src: 'ASSET_URL' }, ...result ];
          },
          // Provide a custom handler for deleting assets
          onDelete: async ({ assets }) => {
            const body = JSON.stringify(assets);
            await fetch('ASSETS_DELETE_URL', { method: 'DELETE', body });
          }
        },
        storage: {
          // Provide a custom handler for saving the project data.
          onSave: async ({ project }) => {
            const body = new FormData();
            body.append('project', JSON.stringify(project));
            await fetch('PROJECT_SAVE_URL', { method: 'POST', body });
          },
          // Provide a custom handler for loading project data.
          onLoad: async () => {
            const response = await fetch('PROJECT_LOAD_URL');
            const project = await response.json();
            // The project JSON is expected to be returned inside an object.
            return { project };
          },
          autosaveChanges: 100,
          autosaveIntervalMs: 10000
        }
      });
    </script> --}}
 