FuelPHPで公開領域と管理画面を別ドメインで運用する
================

1. 公開領域、管理画面、会員管理画面などをそれぞれ別ドメインやサブドメインで設定する
2. ドキュメントルートは、[PROJECT/public_html](public_html/.htaccess)、[PROJECT/admin_html](admin_html/.htaccess)などにする
3. 各ドキュメントルート以下の[.htaccess](admin_html/.htaccess)にサーバー変数を追加する
4. [fuel/app/config/routes.php](fuel/app/config/routes.php) で分岐する


メリット
----

1. 公開領域と管理画面のアクセスユーザーをしっかり分けることができる
2. 管理画面だけBASIC認証をかけるようなこともできる
3. ルート名が被っても問題ない（domain/admin/userなんて不要な階層が発生しない）

デメリット
----
1. （思いついたら書く）
