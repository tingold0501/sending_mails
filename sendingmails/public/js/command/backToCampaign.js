export default (editor, config) => {
    const back_to_campaign = 'back-to-campaign';
    editor.Commands.add(back_to_campaign, {
        run(){
            window.location.href = '/campaign';
        },
        stop: () => { },
    });
}