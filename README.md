# Minesweeper API
Code challenge for Deviget. A Minesweeper game API.

## Tasks to be developed (in order of importance)

* [ ] Design and implement a documented RESTful API for the game (think of a mobile app for your API)
* [ ] When a cell with no adjacent mines is revealed, all adjacent squares will be revealed (and repeat)
* [ ] Ability to 'flag' a cell with a question mark or red flag
* [ ] Detect when game is over
* [ ] Persistence
* [ ] Time tracking
* [ ] Ability to start a new game and preserve/resume the old ones
* [ ] Ability to select the game parameters: number of rows, columns, and mines
* [ ] Ability to support multiple users/accounts

### Acceptance criteria

From stakeholders, this challenge must comply with the following:

- Use PHP and Laravel
- Be sure to complete all the features
- Add tests
- Add good documentation
- UI is not mandatory but adds extra value to the solution. 
- The repository should be PUBLIC and you should send a URL with the solution on this thread.

---
## Observations

The challenge involves the development of a game API using Laravel as the development framework and PHP as the language.

- This proves to be a big challenge in itself. PHP is a server side language and a game is something that must run inside an infinite loop and is not really something that a server side language is good at.
- A good restful API doesn't work with sessions at all. This is another challenge, because the game state must be known somehow. A session will be used as it is the simple approach
- A restful API uses HTTP verbs such as `GET` and `POST`, working with a collection of data in URL endpoints. The idea is to convert the game calls to restful calls, like `minesweeper.local/api/board`
- it is not possible to use sessions at all in the API calls. The code is trying to use it in the `CellApiController` but the session comes blank.

---
## Execution Process

- First, we need to understand the game itself, its rules, objects and data involved.
- We then design a rough approach to the game and convert to Restful classic `CRUD` inside Laravel resource controllers.
- We need a way to start things. The idea is when we `GET` the board, we start or resume the session, showing the current state of the board.
- The idea was to `GET` the cell using X and Y coordinates and show the respective cell value from the session, but it is not working.

### Endpoints

`GET /board`: Creates a new board or shows the current board state

`GET /cell/x/y`: Shows the current cell value, using the current board state
