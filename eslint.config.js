import perfectionist from 'eslint-plugin-perfectionist'
import pluginVue from 'eslint-plugin-vue'
import tseslint from 'typescript-eslint'

export default tseslint.config(
  {
    ignores: ['dist/**'],
  },
  ...tseslint.configs.recommended,
  ...pluginVue.configs['flat/essential'],
  perfectionist.configs['recommended-natural'],
  {
    files: ['**/*.vue'],
    languageOptions: {
      parserOptions: {
        parser: tseslint.parser,
      },
    },
  },
  {
    rules: {
      '@typescript-eslint/no-unused-vars': ['warn', { args: 'after-used', ignoreRestSiblings: false, vars: 'local' }],
      indent: ['error', 2, { SwitchCase: 1 }],
      'linebreak-style': ['error', 'unix'],
      'no-unused-vars': 'off',
      quotes: ['error', 'single', { allowTemplateLiterals: true, avoidEscape: true }],
      semi: ['error', 'never'],
    },
  },
)
