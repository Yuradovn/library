import Resource from './resource'

class BookResource extends Resource {
    constructor () {
        super('books')
    }
}

export { BookResource as default }
