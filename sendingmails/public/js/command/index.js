import { cmdClear, cmdDeviceDesktop, cmdDeviceMobile, cmdDeviceTablet, } from '../consts.js';
import openImport from '../command/openImport.js';
export default (editor, config) => {
    const { Commands } = editor;
    const txtConfirm = config.textCleanCanvas;
    openImport(editor, config);
    Commands.add(cmdDeviceDesktop, {
        run: ed => ed.setDevice('Desktop'),
        stop: () => { },
    });
    Commands.add(cmdDeviceTablet, {
        run: ed => ed.setDevice('Tablet'),
        stop: () => { },
    });
    Commands.add(cmdDeviceMobile, {
        run: ed => ed.setDevice('Mobile portrait'),
        stop: () => { },
    });
    Commands.add(cmdClear, (e) => confirm(txtConfirm) && e.runCommand('core:canvas-clear'));
};
