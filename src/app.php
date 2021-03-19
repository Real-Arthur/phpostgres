<?php
    $db_connection = pg_connect("host=localhost dbname=music_library user=rthrcrsn");
    $tracks = pg_query($db_connection, "SELECT track FROM songs");
    $tracks = pg_query($db_connection, "SELECT artist FROM songs");
    while ($row = pg_fetch_row($tracks)) {
      // var_dump($row);
      echo "Track: $row[0] by $row[0]\n";
  }
?>