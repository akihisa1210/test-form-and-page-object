const { customAlphabet, urlAlphabet } = require('nanoid');

const IndexPage = require('../pageobjects/index.page');
const CreatePage = require('../pageobjects/create.page');

describe('My test site', () => {
    it('should create user', () => {
        // random string
        const notes = customAlphabet(urlAlphabet, 10)();
        console.log("notes:", notes);

        CreatePage.open()
        CreatePage.createUser("user1", notes)

        IndexPage.open()

        expect(IndexPage.userName(2)).toHaveText("user1");
        expect(IndexPage.userNotes(2)).toHaveText(notes);

        IndexPage.deleteUser(2);
    });
});
