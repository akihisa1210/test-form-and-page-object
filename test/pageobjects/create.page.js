class CreatePage {
    get inputUserName() { return $('#user_name') }
    get inputUserNotes() { return $('#user_notes') }
    get buttonSubmit() { return $('input[type="submit"]') }

    open() {
        return browser.url(`http://localhost:8080/create.html`);
    }

    createUser(name, notes) {
        this.inputUserName.setValue(name);
        this.inputUserNotes.setValue(notes);
        this.buttonSubmit.click();
    }
}

module.exports = new CreatePage();
