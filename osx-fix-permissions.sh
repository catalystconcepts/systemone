rm -rf app/cache/*
rm -rf app/logs/*

chmod -R 777 app/cache
chmod -R 777 app/logs

chmod +a "_www allow delete,write,append,file_inherit,directory_inherit" app/cache app/logs
chmod +a "`whoami` allow delete,write,append,file_inherit,directory_inherit" app/cache app/logs