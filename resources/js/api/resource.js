import axios from 'axios'

/**
 * Simple RESTful resource class
 */
class Resource {
    constructor (uri) {
        this.uri = uri
    }
    list (query) {
        return axios({
            url: `api/${this.uri}`,
            method: 'get',
            params: query
        })
    }
}

export { Resource as default }
