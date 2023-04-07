#!/bin/sh

echo "./init.sh" >> .gitignore
GIT=`which git`
if [[ -x $GIT ]] && [[ ! -d .git ]];
then
    $GIT init;
    $GIT add .
    $GIT config --local include.path ../.gitconfig
    echo "GIT is set up"
    echo "Do not forget to add your origin (the gitlab url for this project)"
    echo "with git origin add git@git.b-factor.de:customer/project or something similar"
    echo
    echo 'You can now execute `composer guidedinstall` or import a typo3 database and execute `composer typo3install`'
fi
if [[ -x $GIT ]] && [[ -d .git ]];
then
    $GIT config --local include.path ../.gitconfig
fi
rm init.sh
