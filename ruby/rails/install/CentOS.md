# GemfileがあればGemfile作ってるところはいらない

# ないとsqlite3がどうのこうの言われるので
sudo yum install sqlite3 sqlite-devel

# G++ が入ってないと、therubyracerのmakeがコケる
sudo yum install gcc-c++

# Gemにrailsの情報を突っ込む
bundle init
echo 'gem "rails", github: "rails/rails"' >> Gemfile

# とりあえずいったんインストール
bundle install --path vendor/bundle

# 雛形の生成
bundle exec rails new .

# betaバージョンにつき、リポジトリにないものの対応
vi Gemfile
## gem 'sass-rails',   '~> 4.0.0.beta', github: 'rails/sass-rails'
## gem 'coffee-rails', '~> 4.0.0.beta', github: 'rails/coffee-rails'
  
# なぜか足りないパッケージがあるので追加
vi Gemfile
## gem 'execjs'
## gem 'therubyracer'

# 更新
bundle install --path vendor/bundle

# Webrickあげて起動確認
bundle exec rails s