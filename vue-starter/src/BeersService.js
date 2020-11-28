import axios from 'axios';

const endpoint = 'http://127.0.0.1/beers';

export default class BeersService{
    getAllBeers(){
        return axios.get(endpoint);
    }
}