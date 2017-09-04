# ![](icon.png) HoneDrops

HoneDropsは、Markdownで記述できるシンプルなFlat-File CMSのスケルトンです。

短いPHPファイルと、JavascriptによるMarkdownパーサーで構成されています。

[Singularity CMS](https://christopher.su/singularity-cms/)と[MDwiki](http://dynalon.github.io/mdwiki/#!index.md)にインスパイアされて作りました。


## 特徴

1. データベース不要 > 管理やバックアップが楽
2. サーバー負荷が軽い > Markdownのレンダリングはクライアントで実行
3. インストールが簡単 > ファイルを放り込むだけ
4. Google検索に対応
5. 特定のテンプレートエンジンに依存しない
6. 柔軟なカスタマイズ（Bootstrapとmarked.jsを利用）

### デモ

- [English page](https://www.catch.jp/honedrops/)
- [日本語ページ1](https://www.catch.jp/honedrops/index.ja), [日本語ページ2](https://www.catch.jp/wiki3/)

### ソースコード

- [Github](https://github.com/ycatch/HoneDrops)


## 設置環境

WebサーバーとPHPの実行環境が必要です。

## インストール

1. [Github](https://github.com/ycatch/HoneDrops)からファイルをダウンロードする
2. Webサーバーに、解凍したファイルを放り込む
3. index.phpに、ブラウザでアクセスする


## ページの作成

- マークアップ：[marked.js](https://github.com/chjj/marked)と[github-markdown.css](https://github.com/sindresorhus/github-markdown-css)を使っているので、一般的なMarkdownが通るはず。
- アップロード：[content]ディレクトリに、markdownファイルを放り込む


## ページアクセス

|URL|表示されるページ|
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


## カスタマイズ


### サーバー設定

index.phpで、以下の設定が可能です。

- titleタグ
- Markdownファイルの拡張子
- コンテンツフォルダ名


### ページデザイン

template.phpで、Webページのレイアウトを設定できます。

デフォルトでは、Bootstrapをナビゲーション付きで使っています。

また、css/style.cssでも、細かな設定が可能です。


### Markdown

js/bonedrops.jsで、[marked.js](https://github.com/chjj/marked)のオプションを設定できます。

### 属性の追加

[marked.js](https://github.com/chjj/marked)で出力されない属性などを追加する場合には、js/bonedrops.jsを修正します。jqueryを使うとお手軽でしょう。

例えば、次のコードで、外部リンクを別ウィンドウで表示するようにできます。

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
