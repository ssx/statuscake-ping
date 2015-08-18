# StatusCake Push Tests

There are two traits in this package that will ping off to a StatusCake push
test, either on destruct of a class or via the ping() method.

The two traits included in this package are `\SSX\StatusCake\DestructPing` and 
`\SSX\StatusCake\ManualPing`. Using the `DestructPing` trait will fire the ping 
on the destruction of the class. If you would prefer to fire the ping manually 
then you can use the `ManualPing` trait and `$this->ping()` method.

Make sure to set the env variables `STATUSCAKE_KEY` and also `STATUSCAKE_TESTID`.

Push notification documentation can be found at:
http://kb.statuscake.com/hc/en-us/articles/203808141-Push-Monitoring