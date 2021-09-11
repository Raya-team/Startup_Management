export default class Errors {
    constructor() {
        this.errors = {};
    }

    has(field) {
        // product.0.product_name
        // product.1.product_name
        return this.errors.hasOwnProperty(field);
    }

    get(field) {
        if (this.errors[field]) {
            return this.errors[field][0]
        }
    }

    record(errors) {
        this.errors = errors;
    }
}