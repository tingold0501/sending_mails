
export const emailVariables = [
    {key: '{from_name}', value: 'from_name'},
    {key: '{from_email}', value: 'from_email'},
    {key: '{subject}', value: 'subject'},
    {key: '{text}', value: 'text'},
    {key: '{created_at}', value: 'created_at'},
    {key: '{updated_at}', value: 'updated_at'},
];


// Hàm chèn biến vào nội dung email tại vị trí con trỏ
export function insertVariableAtCaret(inputId, variableKey) {
    const input = document.getElementById(inputId);
    // const caretPos = input.selectionStart;
    const text = input.value;

    input.value = text.substring(0) + variableKey + text.substring();
}

