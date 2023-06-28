import axios from "axios";
import { defineStore } from "pinia";

export const useBusinessStore = defineStore("business", {
    state: () => ({
        businesses: null,
    }),
    actions: {
        async getBusinesses() {
            try {
                let response = await axios.get("businesses");
                this.businesses = response.data.businesses;
                return true;
            } catch (e) {
                return e.response;
            }
        },
        async addBusinesses(form) {
            try {
                let response = await axios.post("businesses", form);
                this.businesses = response.data.businesses;
                return true;
            } catch (e) {
                return e.response;
            }
        },
        async approveAccount(id, option) {
            try {
                let response = await axios.put(
                    "businesses/" + id + "/" + option
                );
                this.businesses = response.data.businesses;
                return true;
            } catch (e) {
                return e.response;
            }
        },
    },
});
