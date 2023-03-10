#!/bin/bash
path=./shell/shell.sh
/usr/bin/inotifywait -mrq --timefmt '%d/%m/%y/%H:%M' --format '%T %w %f' -e modify,delete,create,attrib $path | while read events;
do
bash ./shell/shell.sh
done