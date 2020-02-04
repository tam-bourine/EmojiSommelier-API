var newUsers = [
  {
    user: 'logger',
    pwd: 'password',
    roles: [
      {
        role: 'readWrite',
        db: 'test'
      }
    ]
  }
];

var currentUsers = db.getUsers();
if (currentUsers.length === newUsers.length) {
  quit();
}
db.dropAllUsers();
for (let i = 0, length = newUsers.length; i < length; ++i) {
  db.createUser(newUsers[i]);
}
