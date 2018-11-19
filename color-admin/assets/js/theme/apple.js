/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Version: 4.2.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin-v4.2/admin/
*/
var FONT_COLOR = "#333",
    FONT_FAMILY = '-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif',
    FONT_WEIGHT = "600", FONT_SIZE = "12px", COLOR_BLUE = "#007AFF", COLOR_BLUE_LIGHTER = "#5da5e8",
    COLOR_BLUE_DARKER = "#005bbf", COLOR_BLUE_TRANSPARENT_1 = "rgba(0, 122, 255, 0.1)",
    COLOR_BLUE_TRANSPARENT_2 = "rgba(0, 122, 255, 0.2)", COLOR_BLUE_TRANSPARENT_3 = "rgba(0, 122, 255, 0.3)",
    COLOR_BLUE_TRANSPARENT_4 = "rgba(0, 122, 255, 0.4)", COLOR_BLUE_TRANSPARENT_5 = "rgba(0, 122, 255, 0.5)",
    COLOR_BLUE_TRANSPARENT_6 = "rgba(0, 122, 255, 0.6)", COLOR_BLUE_TRANSPARENT_7 = "rgba(0, 122, 255, 0.7)",
    COLOR_BLUE_TRANSPARENT_8 = "rgba(0, 122, 255, 0.8)", COLOR_BLUE_TRANSPARENT_9 = "rgba(0, 122, 255, 0.9)",
    COLOR_AQUA = "#5AC8FA", COLOR_AQUA_LIGHTER = "#83d6fb", COLOR_AQUA_DARKER = "#4396bb",
    COLOR_AQUA_TRANSPARENT_1 = "rgba(90, 200, 250, 0.1)", COLOR_AQUA_TRANSPARENT_2 = "rgba(90, 200, 250, 0.2)",
    COLOR_AQUA_TRANSPARENT_3 = "rgba(90, 200, 250, 0.3)", COLOR_AQUA_TRANSPARENT_4 = "rgba(90, 200, 250, 0.4)",
    COLOR_AQUA_TRANSPARENT_5 = "rgba(90, 200, 250, 0.5)", COLOR_AQUA_TRANSPARENT_6 = "rgba(90, 200, 250, 0.6)",
    COLOR_AQUA_TRANSPARENT_7 = "rgba(90, 200, 250, 0.7)", COLOR_AQUA_TRANSPARENT_8 = "rgba(90, 200, 250, 0.8)",
    COLOR_AQUA_TRANSPARENT_9 = "rgba(90, 200, 250, 0.9)", COLOR_GREEN = "#4CD964", COLOR_GREEN_LIGHTER = "#79e38b",
    COLOR_GREEN_DARKER = "#39a34b", COLOR_GREEN_TRANSPARENT_1 = "rgba(76, 217, 100, 0.1)",
    COLOR_GREEN_TRANSPARENT_2 = "rgba(76, 217, 100, 0.2)", COLOR_GREEN_TRANSPARENT_3 = "rgba(76, 217, 100, 0.3)",
    COLOR_GREEN_TRANSPARENT_4 = "rgba(76, 217, 100, 0.4)", COLOR_GREEN_TRANSPARENT_5 = "rgba(76, 217, 100, 0.5)",
    COLOR_GREEN_TRANSPARENT_6 = "rgba(76, 217, 100, 0.6)", COLOR_GREEN_TRANSPARENT_7 = "rgba(76, 217, 100, 0.7)",
    COLOR_GREEN_TRANSPARENT_8 = "rgba(76, 217, 100, 0.8)", COLOR_GREEN_TRANSPARENT_9 = "rgba(76, 217, 100, 0.9)",
    COLOR_YELLOW = "#FFCC00", COLOR_YELLOW_LIGHTER = "#ffd940", COLOR_YELLOW_DARKER = "#bf9900",
    COLOR_YELLOW_TRANSPARENT_1 = "rgba(255, 204, 0, 0.1)", COLOR_YELLOW_TRANSPARENT_2 = "rgba(255, 204, 0, 0.2)",
    COLOR_YELLOW_TRANSPARENT_3 = "rgba(255, 204, 0, 0.3)", COLOR_YELLOW_TRANSPARENT_4 = "rgba(255, 204, 0, 0.4)",
    COLOR_YELLOW_TRANSPARENT_5 = "rgba(255, 204, 0, 0.5)", COLOR_YELLOW_TRANSPARENT_6 = "rgba(255, 204, 0, 0.6)",
    COLOR_YELLOW_TRANSPARENT_7 = "rgba(255, 204, 0, 0.7)", COLOR_YELLOW_TRANSPARENT_8 = "rgba(255, 204, 0, 0.8)",
    COLOR_YELLOW_TRANSPARENT_9 = "rgba(255, 204, 0, 0.9)", COLOR_ORANGE = "#FF9500", COLOR_ORANGE_LIGHTER = "#f7b048",
    COLOR_ORANGE_DARKER = "#bf7000", COLOR_ORANGE_TRANSPARENT_1 = "rgba(255, 149, 0, 0.1)",
    COLOR_ORANGE_TRANSPARENT_2 = "rgba(255, 149, 0, 0.2)", COLOR_ORANGE_TRANSPARENT_3 = "rgba(255, 149, 0, 0.3)",
    COLOR_ORANGE_TRANSPARENT_4 = "rgba(255, 149, 0, 0.4)", COLOR_ORANGE_TRANSPARENT_5 = "rgba(255, 149, 0, 0.5)",
    COLOR_ORANGE_TRANSPARENT_6 = "rgba(255, 149, 0, 0.6)", COLOR_ORANGE_TRANSPARENT_7 = "rgba(255, 149, 0, 0.7)",
    COLOR_ORANGE_TRANSPARENT_8 = "rgba(255, 149, 0, 0.8)", COLOR_ORANGE_TRANSPARENT_9 = "rgba(255, 149, 0, 0.9)",
    COLOR_PURPLE = "#5856D6", COLOR_PURPLE_LIGHTER = "#8280e0", COLOR_PURPLE_DARKER = "#4240a0",
    COLOR_PURPLE_TRANSPARENT_1 = "rgba(88, 86, 214, 0.1)", COLOR_PURPLE_TRANSPARENT_2 = "rgba(88, 86, 214, 0.2)",
    COLOR_PURPLE_TRANSPARENT_3 = "rgba(88, 86, 214, 0.3)", COLOR_PURPLE_TRANSPARENT_4 = "rgba(88, 86, 214, 0.4)",
    COLOR_PURPLE_TRANSPARENT_5 = "rgba(88, 86, 214, 0.5)", COLOR_PURPLE_TRANSPARENT_6 = "rgba(88, 86, 214, 0.6)",
    COLOR_PURPLE_TRANSPARENT_7 = "rgba(88, 86, 214, 0.7)", COLOR_PURPLE_TRANSPARENT_8 = "rgba(88, 86, 214, 0.8)",
    COLOR_PURPLE_TRANSPARENT_9 = "rgba(88, 86, 214, 0.9)", COLOR_RED = "#FF3B30", COLOR_RED_LIGHTER = "#ff6c64",
    COLOR_RED_DARKER = "#bf2c24", COLOR_RED_TRANSPARENT_1 = "rgba(255, 59, 48, 0.1)",
    COLOR_RED_TRANSPARENT_2 = "rgba(255, 59, 48, 0.2)", COLOR_RED_TRANSPARENT_3 = "rgba(255, 59, 48, 0.3)",
    COLOR_RED_TRANSPARENT_4 = "rgba(255, 59, 48, 0.4)", COLOR_RED_TRANSPARENT_5 = "rgba(255, 59, 48, 0.5)",
    COLOR_RED_TRANSPARENT_6 = "rgba(255, 59, 48, 0.6)", COLOR_RED_TRANSPARENT_7 = "rgba(255, 59, 48, 0.7)",
    COLOR_RED_TRANSPARENT_8 = "rgba(255, 59, 48, 0.8)", COLOR_RED_TRANSPARENT_9 = "rgba(255, 59, 48, 0.9)",
    COLOR_GREY = "#8a8a8f", COLOR_GREY_LIGHTER = "#a7a7ab", COLOR_GREY_DARKER = "#67676b",
    COLOR_GREY_TRANSPARENT_1 = "rgba(138, 138, 143, 0.1)", COLOR_GREY_TRANSPARENT_2 = "rgba(138, 138, 143, 0.2)",
    COLOR_GREY_TRANSPARENT_3 = "rgba(138, 138, 143, 0.3)", COLOR_GREY_TRANSPARENT_4 = "rgba(138, 138, 143, 0.4)",
    COLOR_GREY_TRANSPARENT_5 = "rgba(138, 138, 143, 0.5)", COLOR_GREY_TRANSPARENT_6 = "rgba(138, 138, 143, 0.6)",
    COLOR_GREY_TRANSPARENT_7 = "rgba(138, 138, 143, 0.7)", COLOR_GREY_TRANSPARENT_8 = "rgba(138, 138, 143, 0.8)",
    COLOR_GREY_TRANSPARENT_9 = "rgba(138, 138, 143, 0.9)", COLOR_SILVER = "#f2f2f2", COLOR_SILVER_LIGHTER = "#f9f9f9",
    COLOR_SILVER_DARKER = "#eee", COLOR_SILVER_TRANSPARENT_1 = "rgba(242, 242, 242, 0.1)",
    COLOR_SILVER_TRANSPARENT_2 = "rgba(242, 242, 242, 0.2)", COLOR_SILVER_TRANSPARENT_3 = "rgba(242, 242, 242, 0.3)",
    COLOR_SILVER_TRANSPARENT_4 = "rgba(242, 242, 242, 0.4)", COLOR_SILVER_TRANSPARENT_5 = "rgba(242, 242, 242, 0.5)",
    COLOR_SILVER_TRANSPARENT_6 = "rgba(242, 242, 242, 0.6)", COLOR_SILVER_TRANSPARENT_7 = "rgba(242, 242, 242, 0.7)",
    COLOR_SILVER_TRANSPARENT_8 = "rgba(242, 242, 242, 0.8)", COLOR_SILVER_TRANSPARENT_9 = "rgba(242, 242, 242, 0.9)",
    COLOR_BLACK = "#222", COLOR_BLACK_LIGHTER = "#333", COLOR_BLACK_DARKER = "#111",
    COLOR_BLACK_TRANSPARENT_1 = "rgba(34, 34, 34, 0.1)", COLOR_BLACK_TRANSPARENT_2 = "rgba(34, 34, 34, 0.2)",
    COLOR_BLACK_TRANSPARENT_3 = "rgba(34, 34, 34, 0.3)", COLOR_BLACK_TRANSPARENT_4 = "rgba(34, 34, 34, 0.4)",
    COLOR_BLACK_TRANSPARENT_5 = "rgba(34, 34, 34, 0.5)", COLOR_BLACK_TRANSPARENT_6 = "rgba(34, 34, 34, 0.6)",
    COLOR_BLACK_TRANSPARENT_7 = "rgba(34, 34, 34, 0.7)", COLOR_BLACK_TRANSPARENT_8 = "rgba(34, 34, 34, 0.8)",
    COLOR_BLACK_TRANSPARENT_9 = "rgba(34, 34, 34, 0.9)", COLOR_WHITE = "#FFFFFF",
    COLOR_WHITE_TRANSPARENT_1 = "rgba(255, 255, 255, 0.1)", COLOR_WHITE_TRANSPARENT_2 = "rgba(255, 255, 255, 0.2)",
    COLOR_WHITE_TRANSPARENT_3 = "rgba(255, 255, 255, 0.3)", COLOR_WHITE_TRANSPARENT_4 = "rgba(255, 255, 255, 0.4)",
    COLOR_WHITE_TRANSPARENT_5 = "rgba(255, 255, 255, 0.5)", COLOR_WHITE_TRANSPARENT_6 = "rgba(255, 255, 255, 0.6)",
    COLOR_WHITE_TRANSPARENT_7 = "rgba(255, 255, 255, 0.7)", COLOR_WHITE_TRANSPARENT_8 = "rgba(255, 255, 255, 0.8)",
    COLOR_WHITE_TRANSPARENT_9 = "rgba(255, 255, 255, 0.9)";