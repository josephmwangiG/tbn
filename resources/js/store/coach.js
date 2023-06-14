import axios from "axios";
import { defineStore } from "pinia";

export const useCoachStore = defineStore("coach", {
    state: () => ({
        coaches: null,
    }),
    actions: {
        async getCoaches() {
            try {
                let response = await axios.get("coaches");
                this.coaches = response.data.coaches
                return true;
            } catch (e) {
                return e.response;
            }
        },
        async addCoach(form) {
            try {
                let response = await axios.post("coaches", form);
                return true;
            } catch (e) {
                return e.response;
            }
        },
    },
});
