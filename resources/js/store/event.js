import axios from "axios";
import { defineStore } from "pinia";

export const useTrainingEventStore = defineStore("trainingEvent", {
    state: () => ({
        trainingEvents: null,
    }),
    actions: {
        async getTrainingEvents() {
            try {
                let response = await axios.get("trainingEvents");
                this.trainingEvents = response.data.trainingEvents;
                return true;
            } catch (e) {
                return e.response;
            }
        },
        async addTrainingEvent(form) {
            try {
                let response = await axios.post("trainingEvents", form);
                this.trainingEvents = response.data.trainingEvents;
                return true;
            } catch (e) {
                return e.response;
            }
        },
    },
});
