import axios from 'axios';

let baseUrl = 'https://cat-fact.herokuapp.com';

/* PostService */
export default class CatFactsService {
    getAllCatFacts() {
        return axios.get(`${baseUrl}/facts`);
    }

    get(page) {
        return axios.get(`${baseUrl}/facts/${page}`);
    }

    write(item) {
        if (item.id) {
            return axios.put(`${baseUrl}/fact/${item.id}`);
        }

        return axios.post(`${baseUrl}/fact`, item);
    }

    delete(id) {
        return axios.delete(`${baseUrl}/fact/${id}`);
    }
}