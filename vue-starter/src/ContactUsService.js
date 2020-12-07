import axios from 'axios';

let baseUrl = 'http://127.0.0.1/contact-us';

/* ContactUsService */
export default class ContactUsService {
    post(item) {
        return axios.post(`${baseUrl}/post`, item);
    }
}