import axios from "axios";
import { defineStore } from "pinia";

export const useCoachingStore = defineStore("coaching", {
    state: () => ({
        coachings: null,
    }),
    actions: {
        async getCoachings() {
            try {
                let response = await axios.get("coachings");
                this.coachings = response.data.coachings;
                return true;
            } catch (e) {
                return e.response;
            }
        },
        async addCoachings(form) {
            try {
                let response = await axios.post("coachings", form);
                return true;
            } catch (e) {
                return e.response;
            }
        },
    },
});
