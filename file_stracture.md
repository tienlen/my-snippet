ファイル構成方針

|アクション|メソッド|役割|備考|
|:--|:--|:--|:--|
|index|GET|一覧画面の表示| - |
|show|GET|詳細画面の表示| - |
|new or add|GET|新規登録画面画面の表示|PHPだとnewが予約語で使えない|
|create|POST|新規登録処理| - |
|edit|GET|一覧画面の表示| - |
|update|PUT or DELETE|指定されたデータの更新処理|PUTが望ましいけど、POSTでも可|
|destroy|POST or DELETE|指定されたデータの削除処理|DELETEが望ましいけど、POSTでも可|