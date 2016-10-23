#!/bin/bash
#mysqldump -u wpuser -pmothernewcrazyleaveearn wordpressdb >wordpressdb.sql
mysqldump --compatible=mysql4 -u wpuser -pmothernewcrazyleaveearn wordpressdb >wordpressdb.sql
