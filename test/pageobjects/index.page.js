class IndexPage {
    userID(number) { return $(`#users tr:nth-child(${number}) td:nth-child(1)`) }
    userName(number) { return $(`#users tr:nth-child(${number}) td:nth-child(2)`) }
    userNotes(number) { return $(`#users :nth-child(${number}) td:nth-child(3)`) }
    buttonDelete(number) { return $(`#users :nth-child(${number}) td:nth-child(4)`) }

    open() {
        return browser.url(`http://localhost:8080`);
    }

    deleteUser(number) {
        this.buttonDelete(number).click();
    }
}

module.exports = new IndexPage();
