# deutschlandfunk-linux
https://github.com/gerdkolano?tab=repositories
New
Repository name deutschlandfunk-linux
Create repository

pushd /var/www/html/erprobe/deutschlandfunk
echo "# deutschlandfunk-linux" >> README.md
vim README.md
cp -auv README.md nach-github-hochladen.txt
git init
git add .
git commit -m "erstes commit"
git config --global user.email "gerdkolano@wp.pl"
git config --global user.name gerdkolano
git remote add origin https://github.com/gerdkolano/deutschlandfunk-linux.git
git push -u origin master

git add .
git commit -m "zweites commit"
git push -u origin master

