# Bludit Boilerplate
## Bludit Boilerplate. No Bullshit. Build YOUR OWN theme.

This is **not** a theme (although it can be used as is).

This is, however, a **starting point** for **your** theme.

## Whats included?
- Theme boilerplate with pages, tags and categories.
- 217B (that's bytes) of CSS that you don't have to include. Purely for basic aesthetic reasons.
- Support for templates. If you set a template in bludit, the theme will try to include `inc/{template-name}.php`.
- Navigation, by default, includes ALL categories and all pages that have the `menu` tag.
- Support for *important* posts. All you have to do is implement a custom `bool` for important in your Custom Fields i.e.
```
{
    "important": {
        "type": "bool",
        "label": "Important",
        "tip": "Is this an important article?"
    }
}
```

## Installation
1. Download BLBP and extract to your `bl-themes` folder.
2. Change `name` and `description` in `en.json` to your theme's name.
3. Make changes and design YOUR theme.

## Credit
I would much appreciate if you leave credit if you use this boilerplate and find it useful.

## More
If there's anything you feel is broken, incorrect or if you feel like this project can be improved somehow, please open issues and/or pull-requests and I'll be glad to take a look.