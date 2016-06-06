# EURO

Euro is a simple web framework for accepting XML files from Opta sports. Currently, the framework supports F1, F40 and F7 files, though others will probably work.

## Routes

### POST

####`/<tournament>/<year>/create/`

### GET

####`/<tournament>/<year>/gameids.json`

Example URL: `/euro/2016/gameids.json`

Returns a unique list of gameids for all games we have received files for. Note: Does not work for games scheduled in the future; we must have recieved at least a single file for the game already.

####`/<tournament>/<year>/game/<gameid>.json`

Example URL: `/euro/2016/game/1.json`

Returns the latest parsed JSON file for the `gameid` specified in the URL.

####`/<tournament>/<year>/game/<gameid>.xml`

Example URL: `/euro/2016/game/1.xml`

Returns the latest raw XML file for the `gameid` specified in the URL.

####`/<tournament>/<year>/file/<filetype>.json`

Example URL: `/euro/2016/game/F1.json`

Returns the latest parsed JSON file for the file type specified in the URL. Useful for F1 and F40 files, neither of which are tied to a single game.

####`/<tournament>/<year>/file/<filetype>.xml`

Example URL: `/euro/2016/game/F40.xml`

Returns the latest raw XML file for the file type specified in the URL. Useful for F1 and F40 files, neither of which are tied to a single game.