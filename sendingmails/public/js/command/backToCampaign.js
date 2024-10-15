import { beforeUnLoad } from "./beforeUnLoad.js";

export default (editor, config) => {
    const back_to_campaign = 'back-to-campaign';
    editor.Commands.add(back_to_campaign, {
        run(){
            beforeUnLoad(editor, config);
        },
        stop: () => { },
    });
}