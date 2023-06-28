import axios from "axios";
import { defineStore } from "pinia";

export const useAlumniStore = defineStore("alumni", {
    state: () => ({
        alumni: null,
    }),
    actions: {
        async getAlumni() {
            try {
                let response = await axios.get("alumni");
                this.alumni = response.data.alumni;
                return true;
            } catch (e) {
                return e.response;
            }
        },
        async addAlumni(form) {
            try {
                let response = await axios.post("alumni", form);
                return true;
            } catch (e) {
                return e.response;
            }
        },
        async approveAccount(id, option) {
            try {
                let response = await axios.put("alumni/" + id + "/" + option);
                this.alumni = response.data.alumni;
                return true;
            } catch (e) {
                return e.response;
            }
        },
    },
});
