# TopdataThemeDemoshopSW6



## Installation via CLI
```bash
alias c='$(pwd)/bin/console'
cd custom/plugins
git clone git@github.com:topdata-software-gmbh/topdata-theme-demoshop-sw6.git TopdataThemeDemoshopSW6
c plugin:refresh
c plugin:install -ac TopdataThemeDemoshopSW6
c theme:change --all TopdataThemeDemoshopSW6
# maybe you need to compile the theme
php bin/console theme:compile
```