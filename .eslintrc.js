module.exports = {
    extends: [
        // add more generic rulesets here, such as:
        'eslint:recommended',
        'plugin:vue/recommended'
    ],
    rules: {
        // 'vue/no-unused-vars': 'error'
        'vue/script-indent': [
            'error', 4, {'baseIndent': 1, 'switchCase': 1}
            ], //4 отступа в JS
        'vue/html-indent': ['error', 4],
        'vue/html-self-closing': ['error', { //Правила закрытия тегов
            'html': {
                'normal': 'never', //обычные теги
            },
        }]
    },
    plugins: [
        'vue'
    ],
    globals: {
        '$': false,
        'notify': false,
        '_': false,
        'Vue': false,
        'axios': false,
        'd3': false,
        'moment': false,
        'import': false
    }
}