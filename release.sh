#!/bin/zsh

if [ $# -eq 0 ]; then
    echo "Please supply the version number as an argument."
fi

read -p "Releaseing Version $1. Did you push/pull/merge all necessary changes to main? (y/n) " remember

if [ $remember != 'y' ]; then 
    echo "\nCome back when you are ready! Aborting Release …"
    exit 1
fi

sed -i '' -E "s/\"version\": \".*\"/\"version\": \"$1\"/" package.json
sed -i '' -E "s/Version: .*/Version: $1/" style.css
sed -i '' -E "s/\"version\": \".*\"/\"version\": \"$1\"/" info.json

# Commit changes
git add package.json style.css info.json
git commit -m "Prepare for release $1"
git push origin main

# Set release version
git checkout -b release/$1 origin/main

git tag -a $1 -m "Release Version $1"
git push origin --tags
git push origin release/$1

git checkout main