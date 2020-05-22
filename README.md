# JunkDrawer
This ExpressionEngine Plugin is a collection of random tools written to use in ExpressionEngine sites.

## Requirements

- ExpressionEngine 3. 4 & 5
- PHP 5.4+

## Available Methods
### bulk_update_status()
This is designed to allow the easy opening & closing of ALL channel entries by specific Channel ID

#### Parameters
- `channel_id=` (*required*) - The ID of the channel you want to close your entries in.
- `status=` - (*required*) - (`open`/`closed`) The status you want to change the channel to. The Default is `open`
- `date=` - (*required*) - This will set the Edit Date on the Channel Entry

Example useage:
```
{exp:junkdrawer:bulk_update_status channel_id="" status="" date="{current_time}"}
```


### randomnumber()
This is designed to allow you to output a random string of numbers in your templates in ExpressionEngine

#### Parameters
- `min=` - The minimum length of the string. The default is `6`
- `max=` - the maximum length of the string. The default is `10`

Example useage:
```
{exp:junkdrawer:randomnumber min="" max=""}
```

## Change Log

### 1.1

- Initial release.
