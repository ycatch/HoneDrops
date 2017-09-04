# HoneDrops

Simple, flat-file CMS skelton which marks up HTML using Markdown.

It has small PHP file, .htaccess and Javascript markdown parser.

HoneDrops is inspired by [Singularity CMS](https://christopher.su/singularity-cms/) and [MDwiki](http://dynalon.github.io/mdwiki/#!index.md).

## feature

1. No Database
2. Lightweight > Markdwon parser runs on your client.
3. Easy install > Drop all files.
4. Google search friendly.
5. Indipend template engine.
6. Flexible custmaization.


## Demo

- [English page](https://www.catch.jp/honedrops/)
- [日本語ページ1](https://www.catch.jp/honedrops/index.ja), [日本語ページ2](https://www.catch.jp/wiki3/)

## Source code

- [Github](https://github.com/ycatch/HoneDrops)


## Required

- Web server and PHP.

## Install

1. [Download](https://github.com/ycatch/HoneDrops) and extract files.
2. Upload files to Web server.
3. Access to index.php.


## Pages

Upload markdown files(.md) to content directory,


## Markup

HoneDrops uses marked.js and github-markdown.css


## Access

|URL|files|
|:-----------|:------------|
|/|/content/index.md|
|/index|/content/index.md|
|/example|/content/example.md|
|/sub01/|/content/sub01/index.md|
|/sub01/index|/content/sub01/index.md|
|/sub01/example|/content/sub01/example.md|
|/sub01/sub11/|/content/sub01/sub11/index.md|
|/sub01/sub11/index|/content/sub01/sub11/index.md|
|/sub01/sub11/example|/content/sub01/sub11/example.md|


## Customization

### Server

please see index.php.


### Page design

You will change page layout by template.php used Bootstrap and css/style.css.


### Markdown

You will sett [marked.js](https://github.com/chjj/marked) options on js/bonedrops.js.


### Attrbution

please see js/bonedrops.js.

For example, add external link on A-tag

``` javascript
// Add external link on a-tag
var domain = "www.example.jp/wiki/";
$('a[href^=http]').not('[href*="'+domain+'"]').attr('target','_blank');
```


## License

 MIT License - Copyright (c) 2017 Yutaka Catch


## Credits

#### Singularity CMS
 - Copyright (c) 2012-2015 Christopher J. Su  
 - https://github.com/csu/singularity-cms

#### marked.js
 - Copyright (c) 2011-2014, Christopher Jeffrey. (MIT License)
 - https://github.com/chjj/marked/

#### github-markdown.css
 - Copyright (c) Sindre Sorhus <sindresorhus@gmail.com> (sindresorhus.com)
 - https://github.com/sindresorhus/github-markdown-css
