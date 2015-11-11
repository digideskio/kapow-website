# Halt script for Kapow Website
# -----------------------------------------------------------------------------

# Perform backup
# -------------------------------------

dbname="kapow_website"
dbfile="$dbname.sql"
backupsrc="database/backups"
backuptgt="$(dirname $0)/database"
user=$USER

cd $backupsrc

if [ -f $dbfile ]
  then
    cp $dbfile $backuptgt

    cd $backuptgt

    mv $dbfile "$dbname-$user.sql"

    echo "Kapow Website database file backed up to the repo!";

  else
    echo "No Kapow Website database file available for backup!"
fi
