import axios from 'axios';

let baseUrl = 'http://127.0.0.1';

export default class BeersService{
    getAllBeers(){
        return axios.get(`${baseUrl}/beers`);
    }

    get(page) {
        return axios.get(`${baseUrl}/beers/${page}`);
    }

    write(item) {
        if (item.id) {
            return axios.put(`${baseUrl}/beer/${item.id}`);
        }

        return axios.post(`${baseUrl}/beer`, item);
    }

    delete(id) {
        return axios.delete(`${baseUrl}/beer/${id}`);
    }
}