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

---
## Execution Process

- First, we need to understand the game itself, its rules, objects and data involved.
- We then design a rough approach to the game and convert to Restful classic `CRUD` inside Laravel resource controllers.
