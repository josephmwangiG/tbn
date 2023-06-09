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
                return true;
            } catch (e) {
                return e.response;
            }
        },
    },
    actions: {
        async addBusinesses(form) {
            try {
                let response = await axios.post("businesses", form);
                return true;
            } catch (e) {
                return e.response;
            }
        },
    },
});
